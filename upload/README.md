###課題内容（課題名・どんな作品か）

  *課題名→PHP,mysqlを使った画像保存機能作成
  
  *内容→最終のプロダクト内でファイルをアップロードする機能は必須なので、今回作成してみた。

  1.画像を選択して説明文を書きアップロードする。
  2.遷移先で、画像についての情報を変数に入れて、mysqlに投げる。その際に、バリエーションを行い適切な文書や画像でない場合ははじくようにする。
  3.mysqlに保存したら、foreach文で情報を引っ張ってきて、画像を表示する。



###工夫した点・こだわった点

 *PHPになってから急にセキュリティの話が出てきたので、そこはYoutubeを写経した後特に念入りに理解に努めました。

###質問・疑問（あれば）

  *今回は画像保存先は結局、自分のPC内になっており、mysql上には画像保存先のディレクトリが保存されている状態です。
   実際にmysql上に画像を保存することは難しいのでしょうか？もしくは別途ストレージがあり、そこに保存するという感じですかね？

  *保存された情報を分析するとなると、PHPではなくpythonを使った方がよいのでしょうか？PHPはあくまでも保存して、表示するといった用途ですかね。
  
  *ファイルdbc.php内にいくつか関数を作成して、他ファイル内での操作時に呼び出すようになっています。
   ところがfunction dbc()に関してはファイルfile_uploaded.phpから呼び出すような記述がないのですがうまく動作しています。
   ここに納得がいってないので教えていただけると助かります。
  
  


###その他（感想、シェアしたいことなんでも）