<template>
    <v-app>
        <v-navigation-drawer class="deep-purple accent-3" v-model="drawer" :clipped="$vuetify.breakpoint.smAndUp" app dark>
            <v-list rounded>
                <v-list-item-group v-model="item">
                    <v-list-item v-for="(item,i) in items" :key="i" :to="item.link" link>
                        <v-list-item-icon>
                            <v-icon>{{ item.icon }}</v-icon>
                        </v-list-item-icon>
                        <v-list-item-content>
                            <v-list-item-title>{{ item.title }}</v-list-item-title>
                        </v-list-item-content>
                    </v-list-item>
                </v-list-item-group>
            </v-list>
            <template v-slot:append>
                <div class="pa-2">
                    <v-btn block>Logout</v-btn>
                </div>
            </template>
        </v-navigation-drawer>
        <v-app-bar color="deep-purple accent-4" dense dark :clipped-left="$vuetify.breakpoint.smAndUp" app>
            <v-app-bar-nav-icon @click.stop="drawer = !drawer"></v-app-bar-nav-icon>
            <v-toolbar-title>{{judul}}</v-toolbar-title>
            <v-spacer></v-spacer>
        </v-app-bar>
        <v-main>
            <v-container class="fill-height deep-purple lighten-5" fluid>
                <v-row align="center" justify="center">
                    <router-view></router-view>
                </v-row>
            </v-container>
        </v-main>
        <v-footer color="deep-purple accent-3" dark padless dense>
            <v-col class="text-center" cols="12">
                {{ new Date().getFullYear() }} — <strong>Naufal Kurnia</strong>
            </v-col>
        </v-footer>
    </v-app>
</template>
<script>
export default {
    name: "Layout",
    props: [],

    data: () => ({
        drawer: null,
        item: 1,
        items: [
            { title: 'Dashboard', icon: 'dashboard', link: 'home' },
            { title: 'Account', icon: 'account_box', link: '/' },
            { title: 'Admin', icon: 'gavel', link: 'login' },
        ],
    }),
    computed: {
        judul: function() {
            return this.items[this.item].title;
        }
    }

}

</script>
