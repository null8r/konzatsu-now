# テーブルの中身
[エクスポートしたファイル](konzatsunow_konzatsu.sql)

## $status_table = 'status_id';
| status |
| :----: |
| i |

1 <= i <= 7

## $konzatsu_table = 'konzatsu';
| id | status | info | color |
| :----: | :----: | :----: | :----: |
| 1 | 😴準備中 | まだ販売を開始していません。 | #808080 |
| 2 | 😄空いている | みんな買いに来て！！ | #00d000 |
| 3 | 😧ちょい混み | そこそこ並んでいます！！ | #fff000 |
| 4 | 😵げき混み | 提供に時間が掛かっています。 | #ff0088 |
| 5 | 😫完売 | 買ってくれてありがとう！！ | #ff0000 |
| 6 | 🥺一時販売停止 | 在庫がない、、、| #8a2be2 |
| 7 | 🧋タピオカのみ | ミルクティー無くなりました、、、 | #deb887 |
