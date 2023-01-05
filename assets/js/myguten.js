console.log( "I'm loaded!" );


const getBlockList = () => wp.data.select( 'core/block-editor' ).getBlocks();

getBlockList().forEach( function( blockType ){
	console.log( blockType.name );
});