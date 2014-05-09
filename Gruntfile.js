module.exports = function (grunt) {

    var scriptList = [
        '_ui/js/app.main.js',
        '_ui/js/components/*.js'
    ];

    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        sass: {
            dev: {
                options: {
                    style: 'expanded',
                    debugInfo: true,
                    lineNumbers: true
                },
                files: {
                    '_ui/compiled/main.css': '_ui/css/main.scss'
                }
            }
            // add prod files that aren't expanded
        },

        // autoprefixer: {
        //     dist: {
        //         files: {
        //             '_ui/compiled/main.css': '_ui/compiled/main.css'
        //         }
        //     }
        // },

        cssmin: {
            dist: {
                options: {
                    banner: '/*! <%= pkg.name %> <%= pkg.version %> <%= grunt.template.today("yyyy-mm-dd HH:MM") %> */\n'
                },
                files: {
                    '_ui/compiled/main.min.css': ['_ui/compiled/main.css']
                }
            }
        },

        concat: {
            dist: {
                src: scriptList,
                dest: '_ui/compiled/main.js'
            },
        },

        uglify: {
            options: {
                banner: '/*! <%= pkg.name %> <%= pkg.version %> <%= grunt.template.today("yyyy-mm-dd HH:MM") %> */\n'
            },
            build: {
                files: {
                    '_ui/compiled/main.min.js': ['_ui/compiled/main.js']
                }
            }
        },

        watch: {
            js: {
                files: ['_ui/js/*.js', '_ui/js/components/*.js'],
                options: {
                    livereload: true
                }
            },
            sass: {
                files: ['_ui/css/*.scss', '_ui/css/**/*.scss'],
                tasks: ['sass'],
                options: {
                    livereload: true
                }
            }
        }
    });

    // NPM tasks
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-sass');
    // grunt.loadNpmTasks('grunt-autoprefixer');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-shell');

    // Grunt tasks
    grunt.registerTask('default', ['sass', 'scriptblock']);
    grunt.registerTask('build', ['sass', 'cssmin', 'concat', 'uglify']);

    // Automate creation of scriptblock to be loaded in footer
    grunt.registerTask('scriptblock', function(){
        var html = '<?php // AUTO-GENERATED BY GRUNT. To change this block edit Gruntfile.js, not this file! ?>' + '\n\n',
            files;

        scriptList.forEach(function(path) {
            files = grunt.file.expand(path);

            files.forEach(function(file){
                html += '<script src="/wp-content/themes/custom/' + file + '"></script>' + "\n";
            });

            grunt.file.write('parts/shared/scripts.php', html);
        });
    });
};