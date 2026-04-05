module.exports = ({ env }) => ({
  plugins: [
    require('postcss-import'),
    require('autoprefixer'),
    ...(env === 'production'
      ? [require('cssnano')({ preset: 'default' })]
      : [])
  ]
});

// Order of operation matters. Make sure imports for combination are done first.