/**************************
*******Get Album App*******
***************************/

const app = new Vue ({
    el: '#app',
    data: {
        albums: [],
    },
    created() {
        //Api
        axios
            .get('http://localhost/php-ajax-dischi/ajax/scripts/database.php')
            .then(res => {
                console.log(res.data);
                this.albums = res.data;
            })
            .catch(err => {
                console.log(err);
            })
    }
});