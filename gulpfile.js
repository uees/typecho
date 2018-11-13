const {src, dest, series} = require('gulp');
const cleanCss = require('gulp-clean-css'); // 压缩CSS
const rename = require('gulp-rename');  // 设置压缩后的文件名
const autoprefixer = require('gulp-autoprefixer');  // 给 CSS 增加前缀。解决某些CSS属性不是标准属性，有各种浏览器前缀的情况
const rev = require('gulp-rev');
const jeditor = require("gulp-json-editor");
const sass = require("gulp-sass");

function bundleCss(cb) {
    return src('usr/themes/default/src/css/main.scss')
        .pipe(sass())
        .pipe(cleanCss()) // 压缩css
        .pipe(autoprefixer({
            browsers: ['last 2 versions', 'Safari >0', 'Explorer >0', 'Edge >0', 'Opera >0', 'Firefox >=20'],//last 2 versions- 主流浏览器的最新两个版本
            cascade: true, // 是否美化属性值 默认：true 像这样：
            // -webkit-transform: rotate(45deg);
            //        transform: rotate(45deg);
            remove: true // 是否去掉不必要的前缀 默认：true
        }))
        .pipe(rename('style.min.css')) // 设置压缩文件名
        .pipe(dest('usr/themes/default/')) // 输出文件的存放地址
        .pipe(rev())  // 添加 hash
        .pipe(rev.manifest({  // 生成 manifest
            merge: true,
        }))
        .pipe(dest('usr/themes/default/')) // manifest 的存放地址

}

function modifyManifest() {
    return src('usr/themes/default/rev-manifest.json')
        .pipe(jeditor(function (json) {
            for (let key of Object.keys(json)) {
                json[key] = json[key].replace(/[^-]+-(.+)\.min.(?:js|css)/, "$1");
            }
            return json;
        }))
        .pipe(dest('usr/themes/default/')) // manifest 的存放地址
}

exports.default = series(bundleCss, modifyManifest);
