<template>
    <div class="article_models_tree">
        <div class="form-group" v-for="model in autoModels">
            <div class="form-check form-check-flat form-check-primary d-flex align-content-center flex-column">
                <div class="d-flex flex-row">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input">
                        {{ model.name }}
                        <i class="input-helper"></i></label>
                    <button @click="getModifications(model)"><i class="ti-plus"></i></button>
                </div>
                {{ model.id }}
                <div v-if="model.modificationsShow">
                    <modifications-tree :modifications="model.modifications"></modifications-tree>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['models', 'get_modifications'],
        data() {
            return {
                autoModels: this.models
            }
        },
        mounted() {
            this.models.map((model) => {
                this.$set(model, 'modificationsShow', false);
            });
        },
        methods: {
            show(model) {
                model.modificationsShow = true;
            },
            hide(model) {
                model.modificationsShow = false;
            },
            addModels(data, brand_id) {

                for(let el in this.autoModels) {
                    if(this.autoModels[el].id == brand_id) {
                        this.$set(this.autoModels[el], 'modifications', data.data);
                        break;
                    }
                }
            },
            getModifications(model) {
                if(model.modificationsShow) {
                    this.hide(model);
                    return;
                } else if(model.modifications != undefined) {
                    this.show(model);
                    return;
                }
                var model_id = model.id;

                let self = this;
                let formData = new FormData();
                formData.append('model_id', model_id);

                axios.post(this.get_modifications, formData)
                    .catch(error => {
                        var message = "";
                        if(error.response.data.message) {
                            message = error.response.data.message
                        } else if(error.response.data.exception) {
                            message = error.response.data.exception
                        } else {
                            message = "???? ?????????????? ?????????????????? ?????????? ????????????????";
                        }
                        flash(message, 'error', error.response.data.errors)
                    })
                    .then(function (data) {
                        self.show(model);
                        self.addModels(data, model_id);
                    });
            }
        }
    }
</script>
<style>
    .article_models_tree {
        margin-left: 20px;
    }
</style>
