		jQuery(document).ready(function($){
			$('.preset-list li a').on('click',function(event){
				event.preventDefault();
				var color = $(this).data('color'),
					url = 'css/presets/'+color+'.css';
					logoSrc = 'images/presets/'+color+'/logo.png';
					ctaIconSrc5 = 'images/presets/'+color+'/31.png';
					ctaIconSrc6 = 'images/presets/'+color+'/32.png';
					ctaIconSrc7 = 'images/presets/'+color+'/33.png';					
					
				$('.navbar-brand img').attr('src', logoSrc);
				$('#preset').attr('href', url);
				$('.cta-icon.icon-jobs img').attr('src', ctaIconSrc5);
				$('.cta-icon.icon-company img').attr('src', ctaIconSrc6);
				$('.cta-icon.icon-candidate img').attr('src', ctaIconSrc7);				
			});

			$('.style-chooser .toggler').on('click', function(event){
				event.preventDefault();
				$(this).closest('.style-chooser').toggleClass('opened');
			});
		});