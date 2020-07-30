<template >
      
 
       <v-row align="center" justify="center" class="bg-2">
            <v-col cols="12" sm="8" md="4">
                <v-card class="elevation-12" >
                    <v-toolbar color="deep-purple accent-4" flat dark   >
                        <v-toolbar-title>Login form</v-toolbar-title>
                        <v-spacer></v-spacer>

                    </v-toolbar>
                    <v-card-text>
                        <v-form>
                            <v-text-field counter="15"  label="Login" name="login" prepend-icon="mdi-account" type="text"></v-text-field>
                            <v-text-field id="password" label="Password" name="password" prepend-icon="mdi-lock" type="password"></v-text-field>
                        </v-form>
                    </v-card-text>
                    <v-card-actions>
                        <v-spacer></v-spacer>
                        <v-btn color="primary">Login</v-btn>
                    </v-card-actions>
                </v-card>
            </v-col>
        </v-row>
   
</template>
<script>
export default {
    props: {
        source: String,
    },
     data: () => ({
       drawer: null,
        item: 1,
        items: [
            { title: 'Dashboard', icon: 'dashboard', link: 'home' },
            { title: 'Account', icon: 'account_box', link: '/' },
            { title: 'Admin', icon: 'gavel', link: 'admin' },
        ],
    }),
      computed: {
        judul: function() {
            return this.items[this.item].title;
        }
    }
}

</script>
