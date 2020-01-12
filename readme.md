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
インフラ：　AWS（EC2） S3(アバター画像保存） Laradock （Docker)    
Laradockを利用してEC2インスタンス内で以下Dockerコンテナを構築しています      
Webサーバ： nginx　　　PHP実行環境： php-fpm  　　DB： MySQL

## 機能
1. 英語の名言投稿機能（Quote　CRUD）
2. マイページ機能（自分の投稿一覧を表示）
3. ストック機能（お気に入りの投稿をストック→「ストック一覧」で表示可能）
4. コメント投稿機能
5. ユーザー登録 /ログイン・ログアウト機能
6. アバター画像登録機能（[laravel-medialibrary](https://github.com/spatie/laravel-medialibrary)経由でS3に保存可能）
7. プロフィール編集機能(ユーザー名、メールアドレス、アバター画像の変更が可能）
8. パスワード変更機能

## 使い方  
#### (各ページの表示例は以下「メイン機能の紹介」をご覧ください）
1. デモページリンクをクリックするとTopページに遷移します。 デモページ： http://18.177.200.78/  

2. ヘッダー右上の「新規登録」よりユーザー登録をお願い致します。
   * パスワードは8文字以上必要になります。
    * 投稿の閲覧はユーザー登録なしでも可能です。    
    
3. 各機能について  
3-1. 「新規投稿」 ヘッダー右上の「投稿する」をクリック → フォームに必要事項を入力して投稿  
3-2. 「マイページ」 アバター画像にカーソルを合わせる→ ドロップダウンメニューが表示 → マイページをクリック  
      　　　(プロフィール/パスワード変更もマイページ経由で可能です)  
3-3. 「ストック機能」  投稿一覧の「ストックする」をクリック→ ドロップダウンメニュー「ストック一覧」  
3-4. 「コメント機能」  投稿一覧の「コメント」をクリック→ フォームにコメントを入力して投稿

## 作者
<a href="https://twitter.com/tuk_nagayan" target="_blank">長田 謙吾：Twitter</a>

## メイン機能の紹介  
#### 投稿一覧
![image](https://user-images.githubusercontent.com/49441355/72108675-7f6a0200-3377-11ea-81bd-bcf71934c768.png)
* 自分自身の投稿のみ編集・削除できます。
* 「ストックする」をクリックするとお気に入りのQuoteを保存できます。

#### 新規投稿(Quote)
![image](https://user-images.githubusercontent.com/49441355/72105910-c228db80-3371-11ea-9dfc-fbbf86858234.png)

#### マイページ （自分の投稿一覧を表示）
![image](https://user-images.githubusercontent.com/49441355/72108843-ca841500-3377-11ea-8d71-1272c12424e7.png)

#### ストック機能 (お気に入りの投稿を保存）
![image](https://user-images.githubusercontent.com/49441355/72109317-05d31380-3379-11ea-898d-24171f516374.png)
* 「ストック解除」をクリックするとストック一覧から削除可能です。自分自身のQuoteもストックできます。

#### コメント投稿機能
![image](https://user-images.githubusercontent.com/49441355/72106823-76773180-3373-11ea-9892-d9fbbd55e59f.png)
* 自分自身のコメントのみ削除できます。

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

* パスワードはプロフィール編集とは別ページで変更する仕様にしています。
* メインのバリデーションは以下の2つを実装しています。  
  1 現在のパスワードと異なる場合変更不可 2 現在のパスワードと同じパスワードの場合変更不可
  
## ライセンス
This project is licensed free.
ご自由にご利用ください。

