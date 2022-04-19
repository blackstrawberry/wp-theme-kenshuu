<!--contents-->
<div class="container">
    <h1><?php the_title(); ?></h1>
    <br>
    <form class="row g-3">
        <div class="col-12">
            <label for="name" class="form-label h4">お名前</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="お名前を書いてください。" required>
        </div>
        <div class="col-12">
            <label for="Address" class="form-label h4">メールアドレス</label>
            <input type="text" class="form-control" id="inputAddress2" placeholder="メールアドレスを書いてください。" required>
        </div>
        <div class="col-md-12">
            <label for="content" class="form-label h4">お問い合わせ内容</label>
            <textarea type="text" class="form-control" id="contents" placeholder="内容を書いてください。" required rows="3"></textarea>
        </div>
        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-secondary">内容を確認する</button>
        </div>
        </form>
        <br>
</div> 
<!--content end-->