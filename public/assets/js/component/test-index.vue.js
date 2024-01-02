Vue.component('test-index', {
    template: `
        <div>
            <button @click="clickGuys">asdasd</button>
            <h1>apa coba</h1>
        </div>
    `,
    props: {
    },
    data() {
        return {
            woy: 'jadi'
        }
    },
    computed: {
    },
    watch: {
    },
    methods: {
        clickGuys() {
            alert(zicare.vmPage.$data.message)
        }
    },
    created() {
    },
    mounted() {
    }
  });