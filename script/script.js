const app = new Vue({
    el: '#app',
    data:{
        arrDiscs: [],
        selectedGenre: '',
        genres: [],
        apiPath: 'server.php'
    },
    methods:{
        getDisc(){
            let path = this.apiPath;
            if(this.selectedGenre){
                path = this.apiPath + '?genre=' + this.selectedGenre;
            }
            console.log(path)
            axios.get(path).then((res)=>{
                this.arrDiscs = res.data;
                if(this.genres.length < 1){
                    this.arrDiscs.forEach((disc) => {
                        if(!this.genres.includes(disc.genre)){
                            this.genres.push(disc.genre);
                            console.log(this.genres);
                        }
                    });
                }
            })
        },
        searchGenre(){
            console.log(this.selectedGenre);
            this.getDisc();
        }
    },
    mounted(){
        this.getDisc();
    }
})