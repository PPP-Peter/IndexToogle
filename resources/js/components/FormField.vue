<template>
    <DefaultField :field="field" :errors="errors" :show-help-text="showHelpText">
        <template #field>
            <label class="container nova-switcher" @click.stop>
                <input
                    class="input"
                    type="checkbox"
                    :checked="value"
                    @change="submit"
                />
                <span class="switch"></span>
                <span class="label">{{ label }}</span>
            </label>
        </template>
    </DefaultField>
</template>


<script>
import { FormField, HandlesValidationErrors } from 'laravel-nova'
import Style from './mixins/style.css';


export default {
    mixins: [FormField, HandlesValidationErrors],

    props: ['resourceName', 'resourceId', 'field'],

    methods: {

        submit() {
            this.value = !this.value
            this.value == true ? this.value = 1 : this.value = 0
        },

        setValue (value) {
            this.value = value
        },

        /**
         * Fill the given FormData object with the field's internal value.
         */
        fill(formData) {
            formData.append(this.field.attribute, Number(this.value))
        },
    },

    mounted() {
        this.value = 0
    }

}
</script>


