<template>
    <table>
        <tr>
            <th></th>
        </tr>
        <tr v-for="(plan, index) in planList">
            <td>{{ index }}</td>
            <td>{{ plan['id'] }}</td>
            <td>{{ plan['order'] }}</td>
            <td>{{ plan['stage_id'] }}</td>
            <td>{{ plan['task_id'] }}</td>
        </tr>
    </table>
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
