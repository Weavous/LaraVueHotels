<h2 align="center">LaraVueHotels</h2>

> A Vue.js project

## Build Setup

``` bash
# install dependencies
npm install

# serve with hot reload at localhost:8080
npm run dev

# build for production with minification
npm run build
```

For detailed explanation on how things work, consult the [docs for vue-loader](http://vuejs.github.io/vue-loader).

<h6 align="center">JSX</h6>

```bash
    npm install babel-plugin-syntax-jsx --save-dev

    npm install babel-plugin-transform-vue-jsx --save-dev

    npm install babel-helper-vue-jsx-merge-props --save-dev

    npm install babel-cli --save-dev

    npm install babel-preset-es2015 --save-dev
```

<h6 align="center">Router</h6>

```bash
    npm install vue-router --save
```

<h6 align="center">Axios</h6>

```bash
    npm	install	axios --save
```

`.babelrc`

```bash
    {
        "presets":	["es2015"],
        "plugins":	["transform-vue-jsx"]
    }
```

`main.js`

```bash
    import Vue from 'vue'
    import App from './App.vue'

    new Vue({
        el: "#app",
        render: (h) => {
            return (
                <header>
                    <h1>Titulo	do	post</h1>
                    <p>Conteudo	da	postagem</p>
                </header>
            )
        }
    });
```

<h6 align="center">Icons<h6>

```bash
    https://icons.getbootstrap.com
```