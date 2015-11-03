module.exports = function(grunt) {

  grunt.initConfig({
    sass: {
      dist: {
        files: {
          'style.css': 'style.scss'
        }
      }
    },
    uglify: {
      build: {
        files: {
          'js/functions.min.js': 'js/functions.js',
        }
      }
    }
  });

  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-uglify');

  grunt.registerTask('default', ['sass','uglify']);
};