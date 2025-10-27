<?php 

	include "config/config.php";

	$id = $_GET['id'];

	$query = mysqli_query($con, "SELECT * FROM tbl_posts WHERE id_post='$id'");
	$data = mysqli_fetch_array($query);
	
?>

<style>
	.article-container {
		max-width: 900px;
		margin: 0 auto;
		padding: 20px;
	}
	
	.article-header {
		text-align: center;
		margin-bottom: 40px;
		padding-bottom: 30px;
		border-bottom: 3px solid #f0f0f0;
	}
	
	.article-title {
		font-size: 2.5rem;
		font-weight: 800;
		line-height: 1.3;
		color: #2c3e50;
		margin-bottom: 20px;
	}
	
	.article-meta {
		display: flex;
		justify-content: center;
		align-items: center;
		flex-wrap: wrap;
		gap: 20px;
		margin-top: 20px;
	}
	
	.meta-item {
		display: inline-flex;
		align-items: center;
		padding: 8px 16px;
		background: #f8f9fa;
		border-radius: 20px;
		font-size: 0.9rem;
		color: #6c757d;
		font-weight: 500;
	}
	
	.meta-item i {
		margin-right: 8px;
		color: #667eea;
	}
	
	.category-badge {
		display: inline-block;
		padding: 8px 20px;
		background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
		color: white;
		border-radius: 20px;
		text-decoration: none;
		text-transform: uppercase;
		font-weight: 600;
		font-size: 0.85rem;
		letter-spacing: 1px;
		transition: all 0.3s ease;
	}
	
	.category-badge:hover {
		transform: translateY(-2px);
		box-shadow: 0 5px 15px rgba(102, 126, 234, 0.4);
		color: white;
		text-decoration: none;
	}
	
	.article-image-wrapper {
		margin: 40px 0;
		border-radius: 15px;
		overflow: hidden;
		box-shadow: 0 10px 40px rgba(0,0,0,0.1);
	}
	
	.article-image-wrapper img {
		width: 100%;
		height: auto;
		display: block;
		transition: transform 0.3s ease;
	}
	
	.article-image-wrapper:hover img {
		transform: scale(1.02);
	}
	
	.article-content {
		font-size: 1.1rem;
		line-height: 1.9;
		color: #444;
		text-align: justify;
		margin-top: 40px;
	}
	
	.article-content p {
		margin-bottom: 1.5rem;
	}
	
	.back-button {
		display: inline-flex;
		align-items: center;
		padding: 12px 24px;
		background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
		color: white;
		border-radius: 10px;
		text-decoration: none;
		font-weight: 600;
		transition: all 0.3s ease;
		margin-bottom: 30px;
	}
	
	.back-button:hover {
		transform: translateY(-2px);
		box-shadow: 0 5px 15px rgba(102, 126, 234, 0.4);
		color: white;
		text-decoration: none;
	}
	
	.back-button i {
		margin-right: 8px;
	}
	
	.share-section {
		margin-top: 50px;
		padding: 30px;
		background: linear-gradient(135deg, rgba(102, 126, 234, 0.05) 0%, rgba(118, 75, 162, 0.05) 100%);
		border-radius: 15px;
		text-align: center;
	}
	
	.share-section h5 {
		color: #667eea;
		font-weight: 700;
		margin-bottom: 20px;
	}
	
	.share-buttons {
		display: flex;
		justify-content: center;
		gap: 15px;
		flex-wrap: wrap;
	}
	
	.share-btn {
		display: inline-flex;
		align-items: center;
		justify-content: center;
		width: 45px;
		height: 45px;
		border-radius: 50%;
		color: white;
		text-decoration: none;
		transition: all 0.3s ease;
		font-size: 1.2rem;
	}
	
	.share-btn:hover {
		transform: translateY(-3px);
		box-shadow: 0 5px 15px rgba(0,0,0,0.2);
		color: white;
	}
	
	.share-facebook { background: #3b5998; }
	.share-twitter { background: #1da1f2; }
	.share-whatsapp { background: #25d366; }
	.share-linkedin { background: #0077b5; }
	
	@media (max-width: 768px) {
		.article-title {
			font-size: 1.8rem;
		}
		
		.article-content {
			font-size: 1rem;
			text-align: left;
		}
		
		.article-meta {
			flex-direction: column;
			gap: 10px;
		}
	}
</style>

<div class="article-container">
	<!-- Back Button -->
	<a href="javascript:history.back()" class="back-button">
		<i class="ion-arrow-left-c"></i> Kembali
	</a>
	
	<!-- Article Header -->
	<div class="article-header">
		<h1 class="article-title"><?= $data['judul'] ?></h1>
		
		<div class="article-meta">
			<span class="meta-item">
				<i class="ion-calendar"></i>
				<?= date('d F Y', strtotime($data['date'])) ?>
			</span>
			
			<a href="#" class="category-badge">
				📁 <?= $data['kategori'] ?>
			</a>
		</div>
	</div>
	
	<!-- Article Image -->
	<div class="article-image-wrapper">
		<img src="assets/file/post/<?= $data['img'] ?>" alt="<?= $data['judul'] ?>">
	</div>
	
	<!-- Article Content -->
	<div class="article-content">
		<?php 
			// Format artikel dengan paragraf yang lebih rapi
			$artikel = $data['artikel'];
			// Pisahkan berdasarkan line break dan buat paragraf
			$paragraphs = explode("\n", $artikel);
			foreach($paragraphs as $paragraph) {
				if(trim($paragraph) != '') {
					echo "<p>" . nl2br(trim($paragraph)) . "</p>";
				}
			}
		?>
	</div>
	
	<!-- Share Section -->
	<div class="share-section">
		<h5>📢 Bagikan Artikel Ini</h5>
		<div class="share-buttons">
			<a href="https://www.facebook.com/sharer/sharer.php?u=<?= urlencode($_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']) ?>" 
			   target="_blank" 
			   class="share-btn share-facebook" 
			   title="Bagikan ke Facebook">
				<i class="ion-social-facebook"></i>
			</a>
			
			<a href="https://twitter.com/intent/tweet?url=<?= urlencode($_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']) ?>&text=<?= urlencode($data['judul']) ?>" 
			   target="_blank" 
			   class="share-btn share-twitter" 
			   title="Bagikan ke Twitter">
				<i class="ion-social-twitter"></i>
			</a>
			
			<a href="https://wa.me/?text=<?= urlencode($data['judul'] . ' - ' . $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']) ?>" 
			   target="_blank" 
			   class="share-btn share-whatsapp" 
			   title="Bagikan ke WhatsApp">
				<i class="ion-social-whatsapp"></i>
			</a>
			
			<a href="https://www.linkedin.com/shareArticle?mini=true&url=<?= urlencode($_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']) ?>&title=<?= urlencode($data['judul']) ?>" 
			   target="_blank" 
			   class="share-btn share-linkedin" 
			   title="Bagikan ke LinkedIn">
				<i class="ion-social-linkedin"></i>
			</a>
		</div>
	</div>
</div>

<style>
	/* Additional styling for better readability */
	.article-content h1, .article-content h2, .article-content h3 {
		color: #2c3e50;
		margin-top: 2rem;
		margin-bottom: 1rem;
		font-weight: 700;
	}
	
	.article-content h1 { font-size: 2rem; }
	.article-content h2 { font-size: 1.75rem; }
	.article-content h3 { font-size: 1.5rem; }
	
	.article-content ul, .article-content ol {
		margin: 1.5rem 0;
		padding-left: 2rem;
	}
	
	.article-content li {
		margin-bottom: 0.75rem;
		line-height: 1.8;
	}
	
	.article-content blockquote {
		border-left: 4px solid #667eea;
		padding-left: 1.5rem;
		margin: 2rem 0;
		font-style: italic;
		color: #6c757d;
		background: #f8f9fa;
		padding: 1.5rem;
		border-radius: 0 10px 10px 0;
	}
	
	.article-content a {
		color: #667eea;
		text-decoration: underline;
		transition: color 0.3s ease;
	}
	
	.article-content a:hover {
		color: #764ba2;
	}
	
	.article-content img {
		max-width: 100%;
		height: auto;
		border-radius: 10px;
		margin: 1.5rem 0;
	}
	
	.article-content code {
		background: #f8f9fa;
		padding: 2px 6px;
		border-radius: 4px;
		font-family: 'Courier New', monospace;
		color: #e83e8c;
	}
	
	.article-content pre {
		background: #f8f9fa;
		padding: 1rem;
		border-radius: 8px;
		overflow-x: auto;
		margin: 1.5rem 0;
	}
</style>
