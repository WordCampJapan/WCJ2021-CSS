# WCJ2021 CSS

WordCamp Japan 2021 用 カスタムCSS開発用のプラグインです。

## Get started

1. cd /PATH/TO/wp-content/plugins/
2. git clone https://github.com/WordCampJapan/wcj2021-css.git ( または、zipファイルをダウンロードしてプラグインを新規追加 )
3. cd wcj2021-css
4. ```yarn``` で packege をインストール（ npm i と同じ意味のコマンド）
5. ```yarn watch``` で SCSS ファイルの修正を常時監視（SCSSを修正したら即時CSSにコンパイルしてくれる）※ windows の場合は、```yarn watch-sass```
6. ```yarn css``` で CSS にコンパイル（コマンド走ったときだけCSSをコンパイル）

---

## ローカルでの開発環境の作成手順

### ローカル上にWPサイトを構築
- Local https://localwp.com/
- wp-env
など、普段使っているものでOKです。
マルチサイト化せずに通常のWordPressのローカル環境を構築してください。
今回使用するテーマは、Twenty Twenty です。

### 必要なプラグインを管理画面からインストールして有効化する
- Gutenberg
- Jetpack
- WordPress インポートツール

### WCJ2021 CSS をGitHubからダウンロードしてインストール、有効化する
https://github.com/WordCampJapan/WCJ2021-CSS
このプラグインです。
上の Get started の 1. 2. の手順でインストール。
有効化すると、アドミンバーの色がデフォルトから変わります。

### WordCamp.org Post Types をインストールして有効化する
本家の https://github.com/WordPress/wordcamp.org から取ってくると有効化したときにエラーが出るので、
WordCamp Japan のものをインストールしてください。
https://github.com/WordCampJapan/wc-post-types
エラーが出ないように、一部コードを修正してあります。

### 本番サイトから記事データを移植
- 本番サイトの「ツール > エクスポート」からすべてのコンテンツをダウンロード。 https://japan.wordcamp.org/2021/wp-admin/export.php
- ローカル環境の「ツール > インポート > インポーターの実行」で、ダウンロードしたファイルをインポート。