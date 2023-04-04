//import find from 'lodash/find';

export default {


    methods: {
        async submit() {
            let formData = new FormData();

            this.value = !this.value
            if (this.value == true) this.value = 1
            if (this.value == false) this.value = 0

            formData.append(this.field.attribute, this.value);
            formData.append('_method', 'PUT');

            return Nova.request().post(`/nova-api/${this.resourceName}/${this.resourceId}`, formData)
                .then(() => {
                    Nova.success(`${this.field.name} ${this.field.flash} `); //${this.value}
                }, (response) => {
                    Nova.error(response);
                    console.log(formData)
                })
                .finally(() => {
                    this.showUpdateButton = false;
                });
        },
    }
}
