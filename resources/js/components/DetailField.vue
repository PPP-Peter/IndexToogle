<template>
    <PanelItem :index="index" :field="field">
        <template #value>
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
    </PanelItem>
</template>

<script>
import { FormField, HandlesValidationErrors } from 'laravel-nova';
import InlineMixin from './mixins/inline';
import Style from './mixins/style.css';

export default {
    mixins: [
        FormField,
        HandlesValidationErrors,
        InlineMixin
    ],

    props: [
        'index',
        'resourceId'
    ],

    mounted() {
        this.isInline = this.field.inlineDetail ?? false;
        this.twoStepDisabled = this.field.detailTwoStepDisabled ?? false;
    },
}
</script>


