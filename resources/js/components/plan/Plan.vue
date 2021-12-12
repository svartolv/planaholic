<template>

</template>

<script>
export default {
    data() {
        return {
            planList: [],
            planDate: '',
        }
    },
    created() {
        this.getPlanList();
    },
    mounted() {
        //тут вызываются методы после монтирования
    },
    computed: {
        //тут вычисляемые свойства
    },
    methods: {
        getPlanList() {
            axios.post(`/plan/list`, {plan_date: this.planDate})
                .then(response => {
                    document.title = response.data.dateTitle;
                    document.getElementById('page-header').innerHTML = response.data.dateTitle;
                    this.planList = response.data.planList;
                })
                // доделать позже всплывалку под шапкой
                // .catch(e => {
                //     Flash.setSuccess('Ошибка в получении данных!')
                // })
        },
    }
}
</script>
