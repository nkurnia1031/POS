@include('head')

<body>
    <div id="app">
        <v-app>


            <v-main>
                <v-container class="fill-height deep-purple lighten-5" fluid>
                    <v-row align="center" justify="center">
                        <router-view></router-view>
                    </v-row>
                </v-container>
            </v-main>
             <v-footer color="deep-purple accent-3" dark padless dense>
                <v-col class="text-center" cols="12">
                    @{{ new Date().getFullYear() }} — <strong>Naufal Kurnia</strong>
                </v-col>
            </v-footer>

        </v-app>
    </div>
</body>

</html>
