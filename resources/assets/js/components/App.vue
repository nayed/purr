<template>
    <div class="container">
        <div class="row">
            <ul>
                <li class="six columns"><a v-link="'home'">Home</a></li>
                <li class="six columns"><a v-link="'about'">About</a></li>
            </ul>
        </div>
        <br>
        <router-view></router-view>
    </div>
</template>
