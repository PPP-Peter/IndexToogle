<template>

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

<script>
import { FormField, HandlesValidationErrors } from 'laravel-nova';
import InlineMixin from './mixins/inline';
import Style from './mixins/style.css';
export default {
props: ['resourceName', 'field'],

  computed: {
    fieldValue() {
      return this.field.displayedAs || this.field.value
    },
  },

    mixins: [
        FormField,
        HandlesValidationErrors,
        InlineMixin
    ],

    data: () => ({
        resourceId: null,
    }),

    mounted() {
        this.resourceId = this.$attrs.resource.id.value;
    },
    methods: {
        fill(formData) {
            formData.append(this.field.attribute, this.value || '')
        },

        async submit() {
            let formData = new FormData();

            this.value = !this.value
            this.value == true ? this.value = 1 : this.value = 0

            formData.append(this.field.attribute, this.value);
            formData.append('_method', 'PUT');

            return Nova.request().post(`/nova-api/${this.resourceName}/${this.resourceId}`, formData)
                .then(() => {
                    if (this.field.flash !== 'false' ) {
                        Nova.success(`${this.field.name} ${this.field.flash} `); //${this.value}
                    }
                }, (response) => {
                    Nova.error(response);
                })
                .finally(() => {
                    console.log('zmenene')
                });
        },
    }
}
</script>

