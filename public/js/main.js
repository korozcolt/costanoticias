axios.get('http://kronnoscms.test/api/posts')
		.then((response) => {
			if(response.status === 200) {
                if(response.data.length !== 0) {
                    let result = response.data.map(post => {
                        let htmlAppended = '<div class="slide"><a href="#"><strong>'+ post.title +'</strong></a></div>';
				        return htmlAppended;
                    });
                    document.getElementById("lastPostsBreaking").innerHTML += result;
                }else{
                    document.getElementById("lastPostsBreaking").innerHTML += '<div class="slide"><a href="#"><strong> CONTENIDO 100% REAL</strong></a></div>';
                }
			}
		});