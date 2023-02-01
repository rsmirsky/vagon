<?php


namespace Partfix\Parser\Model;

use Partfix\Parser\Contracts\ParserInterface;

class Parser implements \Iterator, ParserInterface
{
    private $csvIterator;
    private $limit;
    private $alphabetical = false;
    private $alphabet;
    private $items = [];
    private $maxRowLength = 0;
    private $position = 0;
    const ENCODE_TO = 'UTF-8';
    const ENCODE_FROM = 'Windows-1251';

    public function __construct(CsvIterator $csvIterator)
    {
        $this->csvIterator = $csvIterator;
        $this->position = 0;
    }

    /**
     * @param $file
     * @param string $delimiter
     * @throws \Exception
     * @return self
     */
    public function csv($file, ?string $delimiter = ',') : ParserInterface
    {
        $this->csvIterator->parse($file, $delimiter);

        return $this;
    }

    /**
     * @param int $limit
     * @return self
     */
    public function limit(int $limit) : ParserInterface
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * @return ParserInterface
     */
    public function alphabetical() : ParserInterface
    {
        if(!$this->alphabet) $this->alphabet = range('A', 'Z');

        $this->alphabetical = true;

        return $this;
    }

    /**
     * @return ParserInterface
     */
    public function get() : ParserInterface
    {
        foreach ($this->csvIterator as $key => $row) {
            $row = mb_convert_encoding($row, 'UTF-8', 'Windows-1251');
            if($this->limit && $key > $this->limit) break;
            $this->updateMaxRowLength($row);
            if(!$this->maxRowLength || $this->maxRowLength < count($row)) $this->maxRowLength = count($row);
            if($this->alphabetical) {
                $row = $this->arrayKeysAlphabetical($row);
            }
            $this->items[] = $row;
        }

        return $this;
    }

    /**
     * @return array
     */
    public function getItems() : array
    {
        return $this->items;
    }

    /**
     * @return int
     */
    public function getMaxRowLength() : int
    {
        return $this->maxRowLength;
    }

    /**
     * @param int $length
     * @param callable $callback
     * @return $this
     */
    public function chunk(int $length, callable $callback)
    {
        $chunkItems = [];
        foreach ($this->csvIterator as $key => $row) {
            if($row) {
                $row = $this->convertEncoding($row);
                if($this->alphabet) $row = $this->arrayKeysAlphabetical($row);
                $chunkItems[] = $row;
            }
            if($key % $length == 0) {
                $callback($chunkItems);
                $chunkItems = [];
            }
        }
        $callback($chunkItems);

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function current()
    {
        return $this->items[$this->position];
    }

    /**
     * @inheritDoc
     */
    public function next()
    {
        ++$this->position;
    }

    /**
     * @inheritDoc
     */
    public function key()
    {
        return $this->position;
    }

    /**
     * @inheritDoc
     */
    public function valid()
    {
        return isset($this->items[$this->position]);
    }

    /**
     * @inheritDoc
     */
    public function rewind()
    {
        $this->position = 0;
    }

    private function updateMaxRowLength($row) : void
    {
        if(!$this->maxRowLength || $this->maxRowLength < count($row)) $this->maxRowLength = count($row);
    }

    private function arrayKeysAlphabetical($row)
    {
        foreach ($row as $itemKey => $item) {
            $row[$this->alphabet[$itemKey]] = $row[$itemKey];
            unset($row[$itemKey]);
        }

        return $row;
    }

    private function convertEncoding($row)
    {
        return mb_convert_encoding($row, self::ENCODE_TO, self::ENCODE_FROM);
    }
}
