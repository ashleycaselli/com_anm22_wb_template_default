# com_anm22_wb_template_default - WebBase theme

This repository contains an enriched version of [__com_anm22_wb_template_default__](https://github.com/ANM22/com_anm22_wb_template_default): the starter theme for ANM22 WebBase CMS.


## System Requirements
*	[WebBase engine](https://github.com/ANM22/WebBase) running locally
*   [Node.js](https://nodejs.org/en/)

Check out the [WebBase Developers Guide](https://www.anm22.it/it/webbase-developers/) for further information.

## Developing the theme
1. Create a new repo using the "Use this template" button (or just fork it)
2. Run `npm install` to initialize the development environment
3. Create a file `.env` in the root folder (a template is shown [here](https://gist.github.com/ashleycaselli/c76ac40b025a628fcbfe132b324d2130))
4. Enjoy developing!

This repository supplies an environment to let the developer focus on code while front-end developing.

### How to generate a ready-to-deploy version of CSS/JS sources:
    npm run build
### How to develop CSS/JS and test it live (via [Browsersync](https://www.browsersync.io/), already integrated):
    npm run watch

__NB:__ if you do not create a `.env` file in the root or you do not specify the template directory, the commands above will compile CSS/JS to a `deploy` folder

## Deploying

### Using CI/CD tools

In [this repo](https://github.com/ashleycaselli/deploy-config-com_anm22_wb_template) you can find the configuration for your preferred CI/CD platform.

1. Copy the YAML configuration to the root of your theme repo
2. Copy [`deploy.sh`](https://github.com/ashleycaselli/deploy-config-com_anm22_wb_template/blob/master/deploy.sh) to the root of your theme repo

### Manual upload (not recommended)
Copy all the contents of the root `deploy/` to the WebBase templates path (clean out the environment files if you prefer)
