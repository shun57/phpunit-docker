# phpunit-docker

Zennの記事通りに構築したい場合は以下のファイルを削除してから実施してください。

- composer.json
- composer.lock

## テスト実施コマンド

```
// src/tests配下のテスト
$ composer test
// コードカバレッジを出力
$ composer test:coverage
```

## 下記のZenn記事用のリポジトリ

[PHPUnit実行環境をDockerでサクッと構築！](https://zenn.dev/shun57/articles/4b2cbf33255de4)

[PHPUnitでスタブとモックを理解する！【テストダブル】](https://zenn.dev/shun57/articles/1fd956346c4381)