<div class="py-4">
  <section id="Event">
    <div class="container">
      <!-- event -->
      <h3 class="mb-3">Events</h3>
      <div class="row">
        <?php
          $event=[
            'ミニライブ'=>['event-studio',1],
            'アコ会'=>['event-aco',2],
            '教える会'=>['event-teach',3],
            'ライブ'=>['event-live',4],
            '交流会'=>['event-leisure',5],
          ];
          foreach ($event as $key => $value):?>

            <div class="col-md-4">
              <div class="card mb-3"><img src="../img/<?php echo $value[0]; ?>.jpg" alt="<?php echo $key; ?>" class="img-fluid">
                <div class="card-body d-flex justify-content-between">
                  <h4 class="card-title"><?php echo $key; ?></h4>
                  <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#modal0<?php echo $value[1]; ?>"> 詳しく見る </button>
                </div>
              </div>
          </div>
        <?php endforeach; ?>
      </div>
      
      <!-- event-details-modal -->
      <?php
          $details=[
            'ミニライブ'=>['modal-event',1,'毎月1回開催。第2or第3土曜日13時～16時で某スタジオにて。だいたい20人くらいで6曲程度の課題曲を決めて演奏してます。演奏は挙手性なので譲り合いの精神で成り立ってます。笑 参加費は一律1500円(初回は1000円)。場所は秋葉原を中心に高田馬場、新宿、下北沢など。'],
            'アコ会'=>['modal-aco',2,'みんな大好きgoose house的なことがやりたくて作った企画です。2か月に1回くらいの頻度で代表の気まぐれで実施されます。先日のライブに出た際はVo×3,A-Gt×2,Ba,Key,Cajonの構成でした。割と自由、アレンジはいつもノリです。笑'],
            '教える会'=>['modal-teach',3,'不定期開催の教える会です。要望があった際にパートごとにゲリラ的に開催してます。ちなみに初心者の方と一緒にスタジオ後楽器屋へ行ってギター買うなんてことも割とあります。先日ライブでギタボデビューした方がいたのですが代表、嬉し涙でした。'],
            'ライブ'=>['modal-live',4,'サークル主催ライブです。初めてライブハウスデビューする人も沢山います。最低でも年1回のペースで定期的に開催していく予定です。他にもステージ・照明のあるスタジオで半年に1回のペースでスタジオライブも実施しております。'],
            '交流会'=>['modal-leisure',5,'演奏以外にもみんなで出かけたりもします。新年会や、GWにはBBQ、長期休暇にはフェスに行ったりなどなど(代表はレジャーや飲みの企画が苦手なので参加者のみんなが企画してくれています。笑)。'],
          ];
          foreach ($details as $key => $value):?>

      <div class="modal fade" id="modal0<?php echo $value[1]; ?>" tabindex="-1" role="dialog" aria-labelledby="modal01-label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modal01-label"><?php echo $key; ?></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
            </div>
            <div class="modal-body">
              <p class="text-center">
                <img alt="<?php echo $key; ?>" src="../img/<?php echo $value[0]; ?>.jpg" class="img-fluid">
              </p>
              <p><?php echo $value[2]; ?></p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    <!-- /containerタグ -->
    </div>
  </section>
</div>