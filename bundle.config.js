// bundle.config.js 
module.exports = {
  bundle: {
    main: {
      scripts: [
        './source/main.js'
      ],
    },
    vendor: {
      scripts: './bower_components/angular/angular.js'
    }
  }
};