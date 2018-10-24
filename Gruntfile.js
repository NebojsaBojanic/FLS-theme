module.exports = function(grunt){
const mozjpeg = require('imagemin-mozjpeg');
    
    grunt.initConfig({
    
        concat: {

            js: {
                src: ['js/*.js'],
                dest:'js/roster-scripts.js'
            },        

            css: {
                src: ['css/0-plugins/*'],
                dest:'css/style-wp.css'
            }

        },

        uglify: {
            js: {
                src: ['js/roster-scripts.js'],
                dest:'lib/scripts-min.js'
            }
        },

        cssmin: {
            css: {
                src: ['css/style.css'],
                dest:'css/style.min.css'
            }
        },

        imagemin: {
           
            dynamic: {

               options: {
                    optimizationLevel: 5,
                    svgoPlugins: [{removeViewBox: false}],
                    use: [mozjpeg()] 
                },
                files: [{
                    expand: true,
                    cwd: 'images/',
                    src: ['**/*.{png,jpg,gif}'],
                    dest: 'images/optmizied'
                }]

            },

        },

        sass: {
            dist: {
                src: 'app.scss',
                dest: 'css/style.css'

                // src: 'sass/0-plugins/plugins-dir.scss',
                // dest: 'css/roster-style.css'
            }
        },

    });

    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-imagemin');
    grunt.loadNpmTasks('grunt-node-sass');

};