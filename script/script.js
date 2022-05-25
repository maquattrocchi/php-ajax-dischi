const app = new Vue({
    el: '#app',
    data:{
        arrDiscs: [],
        selectedGenre: '',
        genres: [],
    },
    methods:{
        getDisc(){
            axios.get('server.php').then((res)=>{
                this.arrDiscs = res.data;
                console.log(this.arrDiscs);
                this.arrDiscs.forEach((disc) => {
                    if(!this.genres.includes(disc.genre)){
                        this.genres.push(disc.genre)
                    }
                console.log(this.genres)
                });
            })
            console.log(this.selectedGenre)
        },
        searchGenre(){
            console.log(this.selectedGenre)
        }
    },
    mounted(){
        this.getDisc();
    }
})