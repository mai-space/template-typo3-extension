const webpackConfig = require('./tasks/grunt-webpack')

module.exports = function(grunt) {
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        paths: {
            root: '../',
            resources: '<%= paths.root %>Resources/',
            fonts: '<%= paths.resources %>Public/Fonts/',
            img: '<%= paths.resources %>Public/Images/',
        },
        banner: '/*!\n' +
            ' * customizations v<%= pkg.version %> (<%= pkg.homepage %>)\n' +
            ' * Copyright 2017-<%= grunt.template.today("yyyy") %> <%= pkg.author %>\n' +
            ' * Licensed under the <%= pkg.license %> license\n' +
            ' */\n',
        imagemin: {
            extension: {
                files: [{
                    expand: true,
                    cwd: '<%= paths.resources %>',
                    src: [
                        '**/*.{png,jpg,gif}'
                    ],
                    dest: '<%= paths.resources %>'
                }]
            }
        },
        webpack: webpackConfig
    });

    /**
     * Register tasks
    //  */
    grunt.loadNpmTasks('grunt-contrib-imagemin');
    grunt.loadNpmTasks('grunt-webpack');

    /**
     * Grunt update task
     */
    grunt.registerTask('optimize', ['imagemin']);
    grunt.registerTask('build', ['webpack:prod']);
    grunt.registerTask('build:watch', ['webpack:dev']);
    grunt.registerTask('default', ['build', 'optimize']);
};
