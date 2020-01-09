# Quotes

## アプリ概要
英語の名言を共有するソーシャルアプリです。

デモページ公開中です（AWS)
http://18.177.200.78/

## 企画背景
自分自身、英語が好きでお気に入りのフレーズをノートにまとめる取り組みをこれまで行ってきました。  
個人レベルに留まらずこうした英語フレーズを学習者間で共有できるサービスがあれば面白いと考え  
本アプリを実装しました。

## 開発環境
フロントエンド： Blade、 Sass、 Bootstrap4 、jQuery（ドロップダウンメニュー等）
バックエンド： Laravel  
インフラ：　AWS（EC2） S3(アバター画像保存） Laradock    
Laradockを利用してEC2インスタンス内で以下Dopckerコンテナを構築しています      
Webサーバ： nginx　PHP実行環境： php-fpm  DB： MySQL

## 機能
1. 英語の名言投稿機能（Quote　CRUD）
2. マイページ機能（自分の投稿一覧を表示）
3. ストック機能（お気に入りの投稿をストック→「ストック一覧」で表示可能
4. コメント投稿機能
5. ユーザー登録 /ログイン・ログアウト機能
6. アバター画像登録機能（[laravel-medialibrary](https://github.com/spatie/laravel-medialibrary)経由でS3に保存可能）
7. プロフィール編集機能(ユーザー名、メールアドレス、アバター画像の変更が可能）
8. パスワード変更機能

## 使い方  
#### (各ページの表示例は以下「メイン機能の紹介」をご覧ください）

## 作者
<a href="https://twitter.com/tuk_nagayan" target="_blank">長田 謙吾：Twitter</a>

## メイン機能の紹介  

#### ユーザー登録
![image](https://user-images.githubusercontent.com/49441355/72103699-141b3280-336d-11ea-92fb-2a44e85f8383.png)
* アバター画像未設定の場合はデフォルトのユーザー画像が表示されます。

#### プロフィール編集機能
![image](https://user-images.githubusercontent.com/49441355/72104324-89d3ce00-336e-11ea-9377-39c5c2dadfd8.png)
* ユーザー名、メールアドレス、アバター画像の変更が可能です。
[Demo動画はこちら](https://gyazo.com/bc5c170f20806a32a6f7348b9eaee382)

#### パスワード変更機能
![image](https://user-images.githubusercontent.com/49441355/72104880-b5a38380-336f-11ea-9a14-10ee8e38c6aa.png)

![image](https://user-images.githubusercontent.com/49441355/72104817-93aa0100-336f-11ea-9206-c9c2688585a3.png)

![image](https://user-images.githubusercontent.com/49441355/72104991-f3a0a780-336f-11ea-921f-2d735b3c7dc1.png)

* パスワード変更フォームはプロフィール編集とは別ページで変更する仕様にしています 
* メインのバリデーションは以下の2つを実装しています  
  1 現在のパスワードと異なる場合変更不可 2 現在のパスワードと同じパスワードの場合変更不可
  
## ライセンス
This project is licensed free.
ご自由にご利用ください

