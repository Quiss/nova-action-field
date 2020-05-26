<template>
    <inline-action-selector
        v-if="field.actions.length > 0"
        class="mr-3"
        :resource="resource"
        :resource-name="resourceName"
        :actions="field.actions"
        @actionExecuted="$parent.$emit('actionExecuted')"
    />
</template>

<script>
    export default {
        props: ['resourceName', 'field'],

        mounted() {
            let parentElement = this.$el.parentElement;
            parentElement.classList.add("td-fit");
            parentElement.style.paddingRight = "0px";
            parentElement.style.minWidth = "auto";
        },

        computed: {
            resource() {
                return this.$parent.resource;
            }
        }
    }
</script>
