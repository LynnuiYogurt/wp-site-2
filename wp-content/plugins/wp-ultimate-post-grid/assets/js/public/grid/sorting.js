export default ( elemId, args ) => {
    return {
        order: args.order,
        setOrder( order ) {
            if ( JSON.stringify( order ) !== JSON.stringify( this.order ) ) {
                this.order = order;
                // TODO.
            }
        },
    }
};