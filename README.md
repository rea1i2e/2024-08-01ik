# WordPressサイト制作用テンプレートファイル

## 使用環境
- Node.js バージョン14系以上
- npm バージョン8以上
- バージョンは、以下のコマンドで確認
  - `node -v`
  - `npm -v`


## 導入手順
- MAMP利用
- `cd` コマンドで、`gulp/`へ移動
- `npm i` を実行
- `gulp/`に`node_modules`、`package-lock.json`が生成されたことを確認
- `npx gulp`でタスクランナー起動
 
## テンプレートファイルの特徴
  - src/sass/global/_breakpoints.scssにある変数を`pc` or `sp`に設定することで、spファースト・pcファーストの切り替えが可能です。（初期値：`sp`）
  - サイズ指定は、原則rem()を使います
  - font-sizeは、maxrem()の単位を使うことで、10px未満にならないように指定できます。
  - picture1.phpを使うことで、pictureタグを出力可能です。
  
## その他
- src/root/に設置したファイルは、そのまま`dist/`にコピーされます。
- 納品、サーバーアップ用のファイルは`dist/`にあります。
- 提出時は`npx gulp build`コマンドで、`assets/`内の不要なファイル（`scr/`で削除したもの）を削除できます。
