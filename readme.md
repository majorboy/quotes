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
6. アバター画像登録機能（[laravel medialibrary](https://github.com/spatie/laravel-medialibrary)経由でS3に保存可能）
7. プロフィール編集機能(ユーザー名、メールアドレス、アバター画像の変更が可能）
8. パスワード変更機能

## 使い方  
#### (各ページの表示例は以下「メイン機能の紹介」をご覧ください）

## 作者
<a href="https://twitter.com/tuk_nagayan" target="_blank">長田 謙吾：Twitter</a>

## メイン機能の紹介  

## ライセンス
This project is licensed free.
ご自由にご利用ください

