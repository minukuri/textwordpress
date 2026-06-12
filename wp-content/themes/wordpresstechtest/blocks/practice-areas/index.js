(function(){

const { registerBlockType } = wp.blocks;
const { TextControl } = wp.components;
const { createElement: el } = wp.element;

registerBlockType('wptest/practice-areas', {
    title: 'Practice Areas',
    icon: 'portfolio',
    category: 'widgets',
    attributes: {
        section_title: { type: 'string' },
        heading: { type: 'string' }
    },

    edit: function(props){

        const { attributes, setAttributes } = props;

        return el('div', {}, [

            el(TextControl,{
                label:'Section Title',
                value:attributes.section_title || '',
                onChange:(value)=>setAttributes({
                    section_title:value
                })
            }),

            el(TextControl,{
                label:'Heading',
                value:attributes.heading || '',
                onChange:(value)=>setAttributes({
                    heading:value
                })
            })

        ]);
    },

    save:function(){
        return null;
    }

});

})();