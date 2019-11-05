const path = require("path");
const HtmlWebpackPlugin = require('html-webpack-plugin');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');

module.exports = {
  entry: "./src/index.js",
  output: {
    filename: "main.js",
    path: path.resolve(__dirname, "dist")
  },
  module: {
    rules: [
      {
        test: /\.(png|svg|jpg|gif)$/,
        use: [
          'file-loader',
        ],
      },
      {
        test: /\.scss$/,
        use: [
          {
            loader: MiniCssExtractPlugin.loader
          },
          'css-loader',
          'sass-loader',
        ],
      },
      {
        test: /\.(html)$/,
        include: [path.resolve(__dirname, 'src/partials'), path.resolve(__dirname, 'src/images')],
        use: {
          loader: 'html-loader'
        }
      }
      // {
      //   test: /_.*.html$/,
      //   include: [path.resolve(__dirname, 'src/partials')],
      //   use: [{
      //     loader: 'html-loader'
      //   }]
      // }
    ]
  },
  plugins: [
    new HtmlWebpackPlugin({
      template: './src/index.html',
      inject: true
    }),
    new HtmlWebpackPlugin({
      template: './src/about.html',
      filename: 'about.html',
      inject: true
    }),
    new MiniCssExtractPlugin({
      filename: './main.css'
    }),
  ]
};
