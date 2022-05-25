const app = new Vue({
    el: '#app',
    data:{
        arrDiscs: [],
    },
    methods:{
        getDisc(){
            axios.get('server.php').then((res)=>{
                this.arrDiscs = res.data;
                console.log(this.arrDiscs);
            })
        }
    },
    mounted(){
        this.getDisc();
    }
})