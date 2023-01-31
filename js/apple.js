export class AppComponent {

    auth = firebase.auth();

    async signInWithApple() {
        const provider = new firebase.auth.OAuthProvider('apple.com')

        const result = await this.auth.signInWithApple(provider);

        console.log(result.user);
    }
}