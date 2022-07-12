new Vue ({
    el: '#app',
    data: {
        pageTitle: 'Spotify',
        albums: [],
    },
    mounted() {
        axios.get("api/axios_album.php")
        .then(resp => {
            this.albums = resp.data.albums;
            console.log(this.albums);
        })
    }
})