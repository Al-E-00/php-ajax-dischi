new Vue ({
    el: '#app',
    data: {
        pageTitle: 'Spotify',
        albums: [],
        genre: ""
    },
    methods: {
        filterGenre() {
            axios.get("api/axios_album.php?genre=" + this.genre)
            .then(resp=> {
                this.albums = resp.data.albums;
            })
        }
    },
    mounted() {
        axios.get("api/axios_album.php")
        .then(resp => {
            this.albums = resp.data.albums;
            console.log(this.albums);
        })
    }
})