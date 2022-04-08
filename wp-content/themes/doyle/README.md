# Origin
Origin is a WordPress starter theme. Origin uses [Laravel Mix](https://laravel-mix.com/docs/6.0/what-is-mix) to compile assets.

## Installation instruction
1. `cd path/to/wp-content/themes`
2. Clone this repo: `git clone git@github.com:marcjenkins/origin.git my-theme`
3. Install Mix: `cd my-theme && npm install`
4. Create the .env file: `cp .env-sample .env`
5. Open `.env` and update the paths accordingly
6. Next, you'll need to link to your new Git repo: `rm -rf .git` and then use this guide: [adding an existing project to GitHub using the command line](https://docs.github.com/en/github/importing-your-projects-to-github/adding-an-existing-project-to-github-using-the-command-line)

## Usage
* To build the project use: `npm run production`
* For live reload during develop, use: `npm run watch`

## Example .gitignore and .editorconfig files
Head to the [wp-things repo](https://github.com/marcjenkins/wp-things) for  `.gitignore` and `.editorconfig` files that you can use in your WordPress project. To use these, copy them to your project root.

## Removing SSL support
By default, when running `npm run watch`, this theme will run over HTTPS and look for an SSL certificate that is referenced in your `.env` file. If you are not using SSL locally, follow these steps:

1. Open `webpack.mix.js`
2. Remove the 'https' section (lines 19-22), save and run `npm run watch` again

## Recommended plugins
* This theme requires [Advanced Custom Fields Pro](https://www.advancedcustomfields.com/)
* To create CPTs or taxonomies, use the [site functionality plugin](https://github.com/marcjenkins/site-functionality)
* To create custom Gutenberg blocks with ACF, use the [custom blocks plugin](https://github.com/dmje/custom-blocks)
