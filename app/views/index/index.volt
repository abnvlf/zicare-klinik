<div id="app">
    <button class="btn btn-primary" @click="getList">${ message }</button>
</div>

<script>
    const app = new Vue({
        el: '#app',
        delimiters: ['${', '}'],
        data: {
            message: 'Hello Vue!'
        },
        methods: {
            async getList() {
                const asdasd = await axios.get('/index/getList')
                alert(_.isEmpty(asdasd))
            }
        }
    })
</script>