const { InnerBlocksa } = wp.editor;

/* This section of the code registers a new block, sets an icon and a category, and indicates what type of fields it'll include. */
  
wp.blocks.registerBlockType('brad/border-box', {
    title: 'Simple Box',
    icon: 'smiley',
    category: 'common',
    attributes: {
      content: {type: 'string'},
      color: {type: 'string'}
    },
    
  /* This configures how the content and color fields will work, and sets up the necessary elements */
    
    edit: function(props) {
      function updateContent(event) {
        props.setAttributes({content: event.target.value})
      }
      function updateColor(value) {
        props.setAttributes({color: value.hex})
      }
      return React.createElement(
        "div",
        null,
        React.createElement(
          "h2",
          null,
          "Tab Menu"
        ),
        React.createElement(
            "h3",
            null,
            "Tab 1"
        ),
        React.createElement( InnerBlocks ),
        React.createElement(
            "h3",
            null,
            "Tab 2"
        ),
        React.createElement( InnerBlocks ),
        React.createElement(
            "h3",
            null,
            "Tab 3"
        ),
        React.createElement( InnerBlocks ),
        React.createElement(
            "h3",
            null,
            "Tab 4"
        ),
        React.createElement( InnerBlocks ),
        React.createElement("input", { type: "text", value: props.attributes.content, onChange: updateContent })
      );
    },
    save: function(props) {
      return wp.element.createElement(
        InnerBlocks,
        null,
        props.attributes.content
      );
    }
  })