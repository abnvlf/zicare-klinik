<div id="app">
    <button class="btn btn-primary" @click="getList">${ message }</button>
    <test-index></test-index>
</div>
<!-- {{ assets.outputJs('zivue_index') }} -->
<script>
    zicare.loadJS(`{{ url('/assets/js/zivue_index.js') }}`, () => {
        zicare.ready(() => {
            zicare.vmPage = new Vue({
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
        });
    });
</script>