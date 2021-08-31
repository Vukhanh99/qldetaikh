<div class="content-wrapper" style="min-height: 365px;">
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0 text-dark">Quiz</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Admin</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="card-body table-responsive p-0">
					<div id="main">
						<h3>Danh sách câu hỏi<i></i></h3>
						<a href="../quiz/insertQuiz">Thêm câu hỏi</a>
						<table class="table">
							<thead class="thead-light">
								<tr style="flex-wrap: nowrap;">

									<th scope='col'> Mã quiz</th>
									<th scope='col'> Tên môn học</th>
									<th scope='col'> Nội dung câu hỏi</th>
									<th scope='col'> Đáp án đúng</th>
									<th scope='col'> Chức năng</th>

								</tr>
							</thead>
							<tbody class=".table-striped">

								<?php foreach ($this->tableData as $key => $val) : ?>
									<tr>
										<td style="max-width: 900px;">
											<?php echo $val['ID_quiz']; ?>
										</td>
										<td style="max-width: 900px;"> <?php echo $val['tenMonHoc']; ?> </td>
										<td style="max-width: 900px;"> <?php echo $val['noiDung']; ?> </td>
										<td style="max-width: 900px;"> <?php echo "(".$val['dapAn'].")".$val['dapAnText']; ?> </td>
										<td style="max-width: 900px;">
											<a href="/quiz/updateQuiz&ID_quiz=<?php echo $val['ID_quiz']; ?>">Edit</a>&nbsp;
											<a href="/quiz/delete&ID_quiz=<?php echo $val['ID_quiz']; ?>" onclick="return window.confirm('Are you sure?');">Delete</a>
										</td>
									</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>

				</div>
				<!-- ./col -->
			</div>
		</div>
	</section>
</div>