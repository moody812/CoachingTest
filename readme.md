# PHP-coaching_test_1
Laravelコース フレームワークテスト1
  
## clone時の注意点
clone時は以下のコマンドを利用し、ローカルリポジトリの名称が `coaching_test` になるようにしてください。  

```git
git clone https://github.com/ItoMomo/PHP-coaching_test_1.git coaching_test
```

## 動作準備

clone後は以下の手順を実行し、Laravelプロジェクトが動かせる状態にしましょう。

1. ライブラリのインストール
```
../composer install
```
2. `.env`ファイルの作成
```
cp .env.example .env
```
3. アプリケーションキー生成
```
php artisan key:generate
```
4. Lravelの起動を確認
以下のURLにアクセスし、Laravelのウェルカムページが表示されるかどうかを確認する。  
（vhostsの設定を行っている場合は適宜対応してください）  
[http://localhost/coaching_test/public](http://localhost/coaching_test/public)
