<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <?php
        if( isset($css) && !empty($css)){
            echo '<link rel="stylesheet" href="css/',$css,'">';
        }
    ?>
    <title>映画管理システム</title>

    <style>
    .tabs a {
        color: white;
        transition: color 0.3s;
        /* カラー変化をアニメーション化 */
    }

    .tabs a:hover {
        color: rgba(255, 255, 255, 0.7);
        /* 薄く白くする色を指定 */
    }
    </style>

</head>

<body>
    <div id="app" class="has-background-black">
        <div class="tabs is-left">
            <ul>
                <li v-for="(item, i) in menus" :key="i" class="" class="menu-item"><a :href="item.path"><i
                            :class="item.icon"></i>{{ item.label }}</a></li>
            </ul>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="script/nav.js"></script>