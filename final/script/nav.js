new Vue({
    el: '#app',
    data(){
        return{
            menus: [{
                label: 'トップ',
                path: './top.php'                
            },{
                label: '映画情報一覧',
                path: './movie.php'
            },{
                label: 'カテゴリ一覧',
                path: './categori.php'
            }]
        };
    }
});